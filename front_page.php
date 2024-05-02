<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Width and Height Image</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="next_circule.css">
</head>

<body>

    <div class="container">
        <div class="mask">
            <h1 class="heading">
                Customer Success Team
            </h1>
        </div>
    </div>

    
    <div class="wrap-all-divs">
        <?php

        $json_data = file_get_contents('images.json');
        $data = json_decode($json_data, true);
        if (isset($data['images']) and isset($data['names']) and isset($data['designation'])) {
            foreach ($data['images'] as $key => $image) {
        ?>
                <div class="contain-profile">
                    <div class="first-circule" <?php
                                                if ($key == 1) {
                                                    # code...
                                                ?> style="background-color: rgba(158, 8, 8, 0.5);" <?php
                                                                                                }
                                                                                                    ?>>
                        <div class="secound-circule" <?php
                                                        if ($key == 1) {
                                                            # code...
                                                        ?> style="background-color: rgba(166, 0, 0, 0.367);" <?php
                                                                                                            }
                                                                                                                ?>>
                            <div class="profile-circule">
                                <img src="<?php echo $image; ?>" alt="" class="profile-image1">
                            </div>
                        </div>
                    </div>
                    <h2 class="profile_name"><?php echo $data['names'][$key] ?></h2>
                    <h3 class="profile_designation"><?php echo $data['designation'][$key] ?></h3>
                    <h3 class="profile_email"><?php echo $data['email'][$key] ?></h3>
                    <h3 class="profile_phone"><?php echo $data['Phone'][$key] ?></h3>
                </div>
        <?php
            }
        }
        ?>

    </div>


    <div style="height: 1px; width: 100%; background-color: black; margin-top: 50px;"></div>


    <div class="rounded-main-class"  style= "position: relative; margin-top: 100px;">
        <div class="big_circule" >
            <div class="mid_circule">
                <div class="small_circule" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <div class="small_profile_image1" style="margin-top: 30px;">
                        <img src="profile_image1.jpg" alt="" class="small_profile-image1">
                    </div>
                    <h2 class="profile_name"><?php echo $data['names'][$key] ?></h2>
                    <h3 class="profile_designation"><?php echo $data['designation'][$key] ?></h3>
                    <h3 class="profile_email"><?php echo $data['email'][$key] ?></h3>
                    <h3 class="profile_phone"><?php echo $data['Phone'][$key] ?></h3>
                </div>
            </div>
        </div>
        <?php
        $json = file_get_contents('images.json');
        $data2 = json_decode($json, true);
        if (isset($data['images']) and isset($data['names']) and isset($data['designation'])) {
            # code...
            foreach ($data['images'] as $key => $image) {
                # code...
        ?>
                <div <?php if ($key == 1) {
                            # code...
                        ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; left: 37%; 
                    top: 0px;" <?php
                            } elseif ($key == 2) {
                                # code...
                                ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; left: 0%; 
                    top: 100px;" <?php
                                } elseif ($key == 3) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; left: 37%; 
                    top: 800px;" <?php
                                } elseif ($key == 4) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; right: 4%; 
                    top: 100px;" <?php
                                } elseif ($key == 5) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; left: 4%; 
                    top: 700px;" <?php
                                } elseif ($key == 6) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; right: 4%; 
                    top: 700px;" <?php
                                } elseif ($key == 7) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; left: -10%; 
                    top: 400px;" <?php
                                } elseif ($key == 0) {
                                    # code...
                                    ?> style="display: flex; 
                    flex-direction: column; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 20px; position: 
                    absolute; right: -10%; 
                    top: 400px;" <?php
                                }

                                    ?>>
                    <div class="round1">
                        <div class="round2">
                            <div class="round3">
                                <img src="<?php echo $image ?>" alt="" srcset="" class="round4">
                            </div>
                        </div>
                    </div>
                    <h2 style="margin: 0px; padding: 0px; font-size:small; font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['names'][$key] ?></h2> <!-- Moved outside of the round1 div -->
                    <h3 style="margin: 0px; padding: 0px; font-size:small; font-weight: 600; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['designation'][$key] ?></h2> <!-- Moved outside of the round1 div -->
                        <h3 style="margin: 0px; padding: 0px; font-size:small; font-weight: 600; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['email'][$key] ?></h2> <!-- Moved outside of the round1 div -->
                            <h3 style="margin: 0px; padding: 0px; font-size:small; font-weight: 600; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['Phone'][$key] ?></h2> <!-- Moved outside of the round1 div -->
                </div>
        <?php
            }
        }
        ?>
    </div>


</body>

</html>