<div class="form-resize">
    <form action="edit_crew.php" method="post" class="form-inline">
        <table class="table">
            <fieldset>
                <thead>
                    <tr>
                        <td><b>Flight Number</b></td>
                        <td><b>Date</b></td>
                        <td><b>Cpt</b></td>
                        <td><b>FO</b></td>
                        <td><b>FA L</b></td>
                        <td><b>FA 1</b></td>
                        <td><b>FA 2</b></td>
                        <td><b>FA 3</b></td>
                        <td><b>FA 4</b></td>
                        <td><b>FA 5</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input size="10%" autocomplete="off" class="form-control" name="flight-number" type="text" readonly="readonly" value="<?= $flights[0]['flight-number'] ?>" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="10%" class="form-control" name="flight-date" readonly="readonly" type="text" value="<?= $flights[0]['flight-date'] ?>" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="captain">
                                    <option> </option>
                                    <?php foreach ($pilots as $pilot): ?>
                                        <?php if ($flights[0]['captain'] == $pilot['username']): ?>
                                            <option selected value="<?= $pilot['username'] ?>">
                                                <?= $pilot['last-name'] ?>,
                                                    <?= $pilot['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $pilot['username'] ?>">
                                                    <?= $pilot['last-name'] ?>,
                                                        <?= $pilot['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="first-officer">
                                    <option> </option>
                                    <?php foreach ($pilots as $pilot): ?>
                                        <?php if ($flights[0]['fOfficer'] == $pilot['username']): ?>
                                            <option selected value="<?= $pilot['username'] ?>">
                                                <?= $pilot['last-name'] ?>,
                                                    <?= $pilot['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $pilot['username'] ?>">
                                                    <?= $pilot['last-name'] ?>,
                                                        <?= $pilot['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="fa-lead">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-lead'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="first-junior">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-1'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="second-junior">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-2'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="third-junior">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-3'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="fourth-junior">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-4'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select width="10%" class="form-control" name="fifth-junior">
                                    <option> </option>
                                    <?php foreach ($fas as $fa): ?>
                                        <?php if ($flights[0]['fa-5'] == $fa['username']): ?>
                                            <option selected value="<?= $fa['username'] ?>">
                                                <?= $fa['last-name'] ?>,
                                                    <?= $fa['first-name'] ?>
                                            </option>
                                            <?php else: ?>
                                                <option value="<?= $fa['username'] ?>">
                                                    <?= $fa['last-name'] ?>,
                                                        <?= $fa['first-name'] ?>
                                                </option>
                                                <?php endif ?>

                                                    <?php endforeach ?>
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