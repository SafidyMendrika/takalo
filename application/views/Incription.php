<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
</head>

<body>
    <div class="container profile profile-view" id="profile" style="background: var(--bs-black);">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form>
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control form-control" type="file" name="avatar-file">
                </div>
                <div class="col-md-8">
                    <h1 style="color: var(--bs-white);margin-left: 123px;">Inscriptions</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: var(--bs-white);">Firstname </label><input class="form-control" type="text" name="firstname"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: var(--bs-white);">Lastname </label><input class="form-control" type="text" name="lastname"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3"><label class="form-label" style="color: var(--bs-white);">Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: var(--bs-white);">Password </label><input class="form-control" type="password" name="password" autocomplete="off" required=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form-profile.js"></script>
</body>

</html>