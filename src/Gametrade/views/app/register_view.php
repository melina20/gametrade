<div id="content-wrapper-parent">
    <div id="content-wrapper">
      <div id="content" class="container clearfix">
        <div class="group_breadcrumb">
          <div id="breadcrumb" class="row breadcrumb">
            <div class="col-md-24">
              <a href="<?= base_url('user/home');?>" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Create Account</span>
            </div>
          </div>
        </div>
        <section class="row content">
          <div id="col-main" class="col-md-24 register-page clearfix">
            <div class="clearfix">
              <div class="col-md-19 col-md-push-2 text-center">
                <h4 id="page-title">Register</h4>
                <div class="re_script"><p><strong>Its free, Sign up now!</strong></p>
                </div>
              </div>
            </div>
            <form method="post" action="<?=base_url('user/doregistration');?>" id="create_customer" accept-charset="UTF-8">
              <input name="form_type" type="hidden" value="create_customer">
              <input name="utf8" type="hidden" value="✓">
              <ul id="register-form" class="row list-unstyled">
                <li id="firstname" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="firstname">First Name<span class="req">*</span></label>
                  <input type="text" value="" name="firstname" id="firstname" class="form-control" required>
                </li>
                <li id="lastname" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="lastname">Last Name<span class="req">*</span></label>
                  <input type="text" value="" name="lastname" id="lastname" class="form-control" required>
                </li>
                <li id="email" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="email">Email <span class="req">*</span></label>
                  <input type="email" value="" name="email" id="email" class="form-control" required>
                </li>
                <li id="password" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="password">Password <span class="req">*</span></label>
                  <input type="password" value="" name="password" id="password" class="form-control password" required>
                </li>
                <li id="avatar_img" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="avatar_img">Upload your image</label>
                  <input type="file" name="avatar_img" />
                </li>
                <li id="profile_description" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="profile_description">Profile Description<span class="req">*</span></label>
                  <input type="text" value="" name="profile_description" id="profile_description" class="form-control" required>
                </li>
                <li id="age" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="age">Age<span class="req">*</span></label>
                  <input type="number" value="" name="age" id="age" class="form-control" required>
                </li>
                <li id="phone" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="phone">Phone<span class="req">*</span></label>
                  <input type="number" value="" name="phone" id="phone" class="form-control " required>
                </li>

                <li id="mobile_phone" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="mobile_phone">Mobile phone<span class="req">*</span></label>
                  <input type="number" value="" name="mobile_phone" id="profile_description" class="form-control" required>
                </li>
                <li id="address" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="address">address<span class="req">*</span></label>
                  <input type="text" value="" name="address" id="address" class="form-control" required>
                </li>
                <li id="postcode" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="postcode">postcode<span class="req">*</span></label>
                  <input type="text" value="" name="postcode" id="postcode" class="form-control" required>
                </li>
                <li id="city" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="city">city<span class="req">*</span></label>
                  <input type="text" value="" name="city" id="city" class="form-control" required>
                </li>
                <li id="country" class="col-md-11 col-md-push-1">
                  <label class="control-label" for="country">country<span class="req">*</span></label>
                  <input type="text" value="" name="country" id="country" class="form-control" required>
                </li>
                <li class="col-md-11 col-md-push-1 unpadding-top">
                  <button class="btn btn-1" type="submit">Create New Account</button>
                </li>
              </ul>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
  
  