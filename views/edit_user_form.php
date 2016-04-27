<div class="form-resize">
    <form action="edit_user.php" method="post" class="form-inline">
        <table class="table">
            <fieldset>
                <thead>
                    <tr>
                        <td><b>Company ID</b></td>
                        <td><b>First Name</b></td>
                        <td><b>Last Name</b></td>
                        <td><b>Username</b></td>
                        <td><b>Email</b></td>
                        <td><b>Permissions</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input size="14%" readonly="readonly" class="form-control" name="user-id" value="<?= $users[0]['user-id'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="first-name" value="<?= $users[0]['first-name'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="last-name" value="<?= $users[0]['last-name'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="username" value="<?= $users[0]['username'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="email" value="<?= $users[0]['email'] ?>" type="email" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="14%" class="form-control" name="permissions">
                                    <?php if ($users[0]['permissions'] == "Admin"): ?>
                                        <option value="Admin" selected>Admin</option>
                                        <option value="Pilot">Pilot</option>
                                        <option value="FA">FA</option>
                                        <?php elseif ($users[0]['permissions'] == "Pilot"): ?>
                                            <option value="Admin">Admin</option>
                                            <option value="Pilot" selected>Pilot</option>
                                            <option value="FA">FA</option>
                                            <?php elseif ($users[0]['permissions'] == "FA"): ?>
                                                <option value="Admin">Admin</option>
                                                <option value="Pilot">Pilot</option>
                                                <option value="FA" selected>FA</option>
                                                <?php endif ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Update
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </fieldset>
        </table>
    </form>
</div>