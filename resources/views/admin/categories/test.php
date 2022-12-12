<script>
$(document).ready(function(){  
function fetchstudent()
{
    $.ajax({
        type: "GET",
        url:  "/admin/fetch-students",
        dataType: "json",
        success: function(response){
        //    console.log(response.students); 
        $('tbody').html("");
        $.each(response.students, function(key, item){
            $('tbody').append('<tr>\
            <th>'+item.id+'</th>\
            <td>'+item.name+'</td>\
            <td>'+item.email+'</td>\
            <td>'+item.phone+'</td>\
            <td>'+item.course+'</td>\
            <td><button type="button" value="'+item.id+'" class="edit_student btn btn-info btn-sm float-left mr-1" style="margin-top: 0.3rem;"><i class="fas fa-pencil-alt"></i></button></td>\
            <td><button type="button" value="'+item.id+'" class="delete_student btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button></td>\
            </tr>');    
            });
        }
    });
}};

$(document).on('click', '.update_student', function (e){
        e.preventDefault();
        var stud_id = $('#edit_stud_id').val();
        var data = {
            'name' : $('#edit_name').val(),
            'email' : $('#edit_email').val(),
            'phone' : $('#edit_phone').val(),
            'course' : $('#edit_course').val(),
        };

        $.ajax({
            type: "POST",
            url: "/admin/update-student/"+stud_id,
            data: "data",
            dataType: "json",
            success: function (response) {
                // console.log(response);
                
                    
                    fetchstudent(); 
               
            }
        });
    });
    </script>