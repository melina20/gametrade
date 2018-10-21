<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo">Users listing</h3>
                                <div class="span12 wrap-table">
                            <table class="table-hover">
                                <thead>
                                    <th>User id</th>
                                    <th>First Name</th>
                                    <th>Last Name </th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Avatar</th>
                                    <th>Profile Description</th>
                                    <th>Age</th>
                                    <th>Phone</th>
                                    <th>Mobile Phone</th>
                                    <th>Address</th>
                                    <th>Postcode</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    </thead>
                                <tbody>
                                <?php foreach ($this->users as $user): ?>
                                    <tr>
                                        <td><?= $user['user_id']; ?></td>
                                        <td><?= $user['firstname']; ?></td>
                                        <td><?= $user['lastname']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td><?= $user['password']; ?></td>
                                        <td><?= $user['avatar_img']; ?></td>
                                        <td><?= $user['profile_description']; ?></td>
                                        <td><?= $user['age']; ?></td>
                                        <td><?= $user['phone']; ?></td>
                                        <td><?= $user['mobile_phone']; ?></td>
                                        <td><?= $user['address']; ?></td>
                                        <td><?= $user['postcode']; ?></td>
                                        <td><?= $user['city']; ?></td>
                                        <td><?= $user['country']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>