/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function profileEditAjax(name, pk, value){
    var response;
    $.ajax({
        url:"edit_profile_ajax.php",
        type:"POST",
        data:{
            name:name,
            pk:pk,
            value:value
        },
        dataType:"text",
        success:function(server_response){
            response=server_response;
        },
        error:function(textStatus){
            response=textStatus;
        }
    });
    return response;
}






function fetchDonors(blood_group, last_date){
    var response;
    $.ajax({
        url:"fetch_donors_ajax.php",
        type:"POST",
        data:{
            blood_group:blood_group,
            last_date:last_date
        },
        dataType:"text",
        success:function(server_response){
            response=server_response;
        },
        error:function(textStatus){
            response=textStatus;
        }
    });
    return response;
}