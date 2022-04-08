<?php 

// notif contact message a bien été envoyé 
function notif_contact()
{ ?>
    <div id="notif_contact">
        <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
            <img src="../images/logo.png" alt="" width="15%" class="alert-logo">
            <strong>
                Message envoyé !
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="this.parentElement.style.display='none';" aria-label="Close"></button>
        </div>
    </div>
<?php }
