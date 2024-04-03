<div class="col-auto d-flex align-items-center my-2 my-sm-0">
    <div class="dropdown export-dropdown">
        <!-- <a href="#" role="button" id="Exportbtn" data-bs-toggle="dropdown" aria-expanded="false"
            class="btn btn-md btn-primary ms-1 px-3"><span class="ps-1"><i class="bi bi-plus-circle-fill"></i> Add
                New</span> <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="7.875"
                viewBox="0 0 14 7.875">
                <path
                    d="M.231.228A.8.8,0,0,1,1.256.152l.088.075,6.3,6.222a.771.771,0,0,1,.076,1.013l-.076.087-6.3,6.222a.794.794,0,0,1-1.114,0,.771.771,0,0,1-.076-1.013l.076-.087L5.973,7,.231,1.328A.771.771,0,0,1,.154.315Z"
                    transform="translate(14) rotate(90)" fill="#fff" />
            </svg>
        </a> -->
        <?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "<h6 style= font-family:lora;>".  "Good morning" . " ".Auth::user()->name .""."</h6>";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "<h6 style= font-family:lora;>". "Good afternoon" . " " . Auth::user()->name .""."</h6>";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "<h6 style= font-family:lora;>". "Good evening" . " " . Auth::user()->name .""."</h6>";
    }
    ?>
        <!-- <ul class="dropdown-menu" aria-labelledby="Exportbtn">
            <li><a class="dropdown-item" href="#">Submenu</a></li>
            <li><a class="dropdown-item" href="#">Submenu</a></li>
        </ul> -->
    </div>
</div>