 <!-- find a way to hide key on github -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Helper</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="MT-headding">
        <h1 class="h1_font">Social Media Marketing Tool</h1>
    </div>
    <div class="container">
        <div class="facebook_container">
            <div class="inner_container">
                <div>
                    <h1 class="font">Write a Facebook Marketing Captions for</h1>
                </div>
                <div>
                    <form action="fb-caption-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="sushi, nba, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Caption" />
                        </div>
                    </form>
                </div>

                <hr>

                <div>
                    <h1 class="font">Generate a Facebook Image for</h1>
                </div>
                <div>
                    <form action="fb-image-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="t-shirt, burger, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Image" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr>
        <hr>

        <div class="instagram_container">
            <div class="inner_container">
                <div>
                    <h1 class="font">Write a Instagram Marketing Captions for</h1>
                </div>
                <div>
                    <form action="ig-caption-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="hotdog, airplane, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Caption" />
                        </div>
                    </form>
                </div>

                <hr>

                <div>
                    <h1 class="font">Generate a Instagram Image for</h1>
                </div>
                <div>
                    <form action="ig-image-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="Toronto, racoon, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Image" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <hr>


        <div class="twitter_container">
        
            <div class="inner_container">

                <div>
                    <h1 class="font">Write a Twitter Marketing Captions for</h1>
                </div>
                <div>
                    <form action="tw-caption-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="tesla, Hollywood, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Caption" />
                        </div>
                    </form>
                </div>

                <hr>

                <div>
                    <h1 class="font">Generate a Twitter image for</h1>
                </div>
                <div>
                    <form action="tw-image-ai.php" method="post">
                        <div>
                            <input type="text" name="prompt" placeholder="rollar coaster, fries, etc" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Generate Image" />
                        </div>
                    </form>
                </div>
            </div>

        </div>
        
    </div>



</body>
</html>