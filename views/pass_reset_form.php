<div class="form-resize">
    <form action="pass_reset.php" method="post" class="form-inline">
        <table class="table">
            <fieldset>
                <thead>
                    <tr>
                        <td><b>Company ID</b></td>
                        <td><b>First Name</b></td>
                        <td><b>Last Name</b></td>
                        <td><b>Username</b></td>
                        <td><b>Password</b></td>
                        <td><b>Confirm</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input size="14%" autocomplete="off" readonly="readonly" class="form-control" name="user-id" value="<?= $users[0]['user-id'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" autocomplete="off" readonly="readonly" class="form-control" name="first-name" value="<?= $users[0]['first-name'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" readonly="readonly" name="last-name" value="<?= $users[0]['last-name'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" readonly="readonly" name="username" value="<?= $users[0]['username'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="password" placeholder="Password" type="password" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="confirm" placeholder="Confirm" type="password" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span> Update
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </fieldset>
        </table>
    </form>
</div>