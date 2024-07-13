console.log('course .js loadimng');
var parent_url = '/courseList'
var tableDiscriptionBulletPoints,tableModules,tableCareerPath;
$(document).ready(function () {
    tableDiscriptionBulletPoints = $('#tableDiscriptionBulletPoints').DataTable({
        responsive: true,
        searching: false,
        lengthChange: false,
        paging: false,
        "columns": [
            { "data": "thBulletPoint","width": '90%' },
            { "data": "action" ,"width": '5%'},
        ],
    });
    tableModules = $('#tableModules').DataTable({
        responsive: true,
        searching: false,
        lengthChange: false,
        paging: false,
        "columns": [
            { "data": "thModule","width": '90%' },
            { "data": "action" ,"width": '5%'},
        ],
    });
    tableCareerPath = $('#tableCareerPath').DataTable({
        responsive: true,
        searching: false,
        lengthChange: false,
        paging: false,
        "columns": [
            { "data": "thCareerPath","width": '90%' },
            { "data": "action" ,"width": '5%'},
        ],
    });


    $('#btnAddBulletPoint').click(function() {
        var bulletPoint = $('#description_bullet_point').val();
        if (bulletPoint) {
            addBulletpointToTable(bulletPoint);
        }
        $('#description_bullet_point').val('');
    });
    $('#btnAddModule').click(function() {
        var Course_module = $('#course_module').val();
        if (Course_module) {
            addModuleToTable(Course_module);
        }
        $('#course_module').val('');
    });
    $('#btnAddCareerPath').click(function() {
        var career_path = $('#course_career_path').val();
        if (career_path) {
            addCareerPathToTable(career_path);
        }
        $('#course_career_path').val('');
    });

    $('#tableDiscriptionBulletPoints tbody').on('click', '.clear-row', function() {
        tableDiscriptionBulletPoints.row($(this).parents('tr')).remove().draw();
    });
    $('#tableModules tbody').on('click', '.clear-row', function() {
        tableModules.row($(this).parents('tr')).remove().draw();
    });
    $('#tableCareerPath tbody').on('click', '.clear-row', function() {
        tableCareerPath.row($(this).parents('tr')).remove().draw();
    });

    $('#btnSave').click(function () {
        var form = $('#form');
        var tableDataJson = gatherBulletPointTableData();
        var moduleDataJson = gatherModuleTableData();
        var careerDataJson = gatherCareerPathTableData();


        var data = new FormData(form.get(0));
        data.append('description_bulletpoints', tableDataJson);
        data.append('modules', moduleDataJson);
        data.append('career_paths', careerDataJson);

        // for (var pair of data.entries()) {
        //     console.log(pair[0] + ': ' + pair[1]);
        // }
        var url = $('#btnSave').text().trim() === 'Save' ? '/course/save' : '/course/update';
        saveOrUpdate(url, data, form);
    });


    $('#image').change(function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    var dropdownData = {
        Department: { elementID: '#department_id', key: 'name' },
    };
    loadDropDownData( '/course/',dropdownData);
    loadCourse();
});

function loadCourse() {
    if (window.location.search.length > 0) {
        var sPageURL = window.location.search.substring(1);
        var param = sPageURL.split('&');
        var id = param[0];
        if (param.length == 2) {
            console.log('view ')
            $('#btnSave').hide();
        } else {
            console.log('edit ');
            $('#btnSave').text('Update');
        }
    }
    if (id) {
        $.ajax({
            type: "GET",
            url: "/course/loadCourse/" + id,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            async: false,
            success: function (response) {

                if (response.success) {
                    console.log(response.result);
                    var data = response.result;

                    $('#hiddenId').val(data.id);

                    $('#name').val(data.name);
                    $('#price').val(data.price);
                    $('#duration').val(data.duration);
                    $('#min_students').val(data.min_students);
                    $('#skill_level').val(data.skill_level);
                    $('#language').val(data.language);
                    $('#description_title').val(data.description_title);
                    $('#description').val(data.description);
                    $('#curriculum_title').val(data.curriculum_title);
                    $('#curriculum').val(data.curriculum);
                    $('#career_path_title').val(data.career_path_title);
                    $('#career_path').val(data.career_path);
                    $('#department_id').val(data.department_id);
                    $('#previewImage').attr('src', 'uploads/' + data.image);

                    data.course_discription_buletlines.forEach(element => {
                        addBulletpointToTable(element.buletline);
                    });
                    data.course_curriculums.forEach(element => {
                        addModuleToTable(element.module);
                    });
                    data.course_career_paths.forEach(element => {
                        addCareerPathToTable(element.career_path);
                    });

                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}
function addBulletpointToTable(bulletPoint) {
    tableDiscriptionBulletPoints.row.add({
        "thBulletPoint": bulletPoint,
        "action": '<i class="fa fa-trash fa-2x text-danger clear-row" aria-hidden="true" ></i>'
    }).draw(false);
}
function addModuleToTable(Course_module) {
    tableModules.row.add({
        "thModule": Course_module,
        "action": '<i class="fa fa-trash fa-2x text-danger clear-row" aria-hidden="true" ></i>'
    }).draw(false);
}
function addCareerPathToTable(career_path) {
    tableCareerPath.row.add({
        "thCareerPath": career_path,
        "action": '<i class="fa fa-trash fa-2x text-danger clear-row" aria-hidden="true" ></i>'
    }).draw(false);
}
function gatherBulletPointTableData() {
    var dataArray = [];
    tableDiscriptionBulletPoints.rows().every(function() {
        var data = this.data();
        dataArray.push(data.thBulletPoint);
    });
    return JSON.stringify(dataArray);
}
function gatherModuleTableData() {
    var dataArray = [];
    tableModules.rows().every(function() {
        var data = this.data();
        dataArray.push(data.thModule);
    });
    return JSON.stringify(dataArray);
}
function gatherCareerPathTableData() {
    var dataArray = [];
    tableCareerPath.rows().every(function() {
        var data = this.data();
        dataArray.push(data.thCareerPath);
    });
    return JSON.stringify(dataArray);
}
