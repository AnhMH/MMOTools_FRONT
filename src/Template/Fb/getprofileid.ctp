<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Find your Facebook ID</h1>
        <p class="lead text-muted">To find your Facebook numeric ID for fb:admins, social plugins, and more, enter your <strong>Facebook URL</strong> below:</p>
        <form action="<?php echo $BASE_URL; ?>/getprofileid" method="post" class="customForm">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>" />
            <input class="form-control" type="text" name="url" value="" placeholder="https://www.facebook.com/YourName"/>
            <p>
                <input type="submit" value="Find numeric ID →" name="formSubmit" class="btn btn-primary my-2"/>
            </p>
        </form>
    </div>
</section>

<div class="py-5 bg-light">
    <div class="container">
        <h3>What's my personal profile URL?</h3>
        <p>Your Facebook personal profile URL is the the URL you get to when you click on your name in the upper left of the Facebook home page. It <b>should look</b> something like this:</p>
        <ul class="alert alert-success" >
            <li>https://www.facebook.com/JohnDoe</li>
            <li>https://m.facebook.com/sally.struthers</li>
            <li>https://www.facebook.com/profile.php?id=24353623</li>
        </ul>
        <p>Your personal profile <b>does not</b> look anything like these examples:</p>
        <ul class="alert alert-danger">
            <li>https://www.facebook.com</li>
            <li>Sally Struthers</li>
            <li>sally@struthers.com</li> 
        </ul>
        <p>If you are logged into Facebook in your current browser, you should be able to click <a href="https://facebook.com/profile.php" target="_blank">this link</a>, and it will redirect you to your profile page. Then, copy the URL from your browsers address bar and come back here to try again.</p>
    </div>
</div>