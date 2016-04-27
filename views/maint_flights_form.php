<div class="form-resize">
    <form action="maint_flights.php" method="post">
        <table class="table">
            <fieldset>
                <thead>
                    <tr>
                        <td><b>Flight Number</b></td>
                        <td><b>Date</b></td>
                        <td><b>Depart</b></td>
                        <td><b>Start Time</b></td>
                        <td><b>Arrive</b></td>
                        <td><b>End Time</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input size="14%" autocomplete="off" autofocus class="form-control" name="flight-number" placeholder="Flight Number" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-date" placeholder="YY-MM-DD" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-depart" placeholder="Departure Airport" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-start" placeholder="Start Time" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-arrive" placeholder="Arrival Airport" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-end" placeholder="End Time" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Add Flight
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </fieldset>
        </table>
    </form>
</div>
<br>
<br>
<div>
    <h2>Current Flights</h2>
</div>
<table class="table">
    <fieldset>
        <thead>
            <tr>
                <td><b>Flight Number</b></td>
                <td><b>Date</b></td>
                <td><b>Depart</b></td>
                <td><b>Start Time</b></td>
                <td><b>Arrive</b></td>
                <td><b>End Time</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
                <tr>
                    <td>
                        <?= $flight["flight-number"] ?>
                    </td>
                    <td>
                        <?= $flight["flight-date"] ?>
                    </td>
                    <td>
                        <?= $flight["flight-depart"] ?>
                    </td>
                    <td>
                        <?= $flight["flight-start"] ?>
                    </td>
                    <td>
                        <?= $flight["flight-arrive"] ?>
                    </td>
                    <td>
                        <?= $flight["flight-end"] ?>
                    </td>
                    <td align="right" width="30%">
                        <?php if ($flight["assigned"] == 1): ?>
                            <button class="btn btn-default btn-xs" onclick="editCrewBtn(this.id)" id="<?= $flight['flight-number'] + 3 ?>" type="button">
                                <span aria-hidden="true" class="glyphicon glyphicon-edit"></span> Edit Crew
                            </button>
                            <?php else: ?>
                                <button class="btn btn-default btn-xs" onclick="assignCrewBtn(this.id)" id="<?= $flight['flight-number'] + 2 ?>" type="button">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Assign Crew
                                </button>
                                <?php endif ?>
                                    <button class="btn btn-warning btn-xs" type="button" onclick="editFlightBtn(this.id)" id="<?= $flight['flight-number'] + 1 ?>">
                                        <span aria-hidden="true" class="glyphicon glyphicon-edit"></span> Edit Flight
                                    </button>
                                    <button class="btn btn-danger btn-xs" type="button" onclick="delFlightBtn(this.id)" id="<?= $flight['flight-number'] ?>">
                                        <span aria-hidden="true" class="glyphicon glyphicon-remove"></span> Delete Flight
                                    </button>
                    </td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </fieldset>
</table>