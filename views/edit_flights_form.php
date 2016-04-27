<div class="form-resize">
    <form action="edit_flight.php" method="post" class="form-inline">
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
                                <input size="14%" autocomplete="off" readonly="readonly" class="form-control" name="flight-number" value="<?= $flights[0]['flight-number'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" readonly="readonly" name="flight-date" value="<?= $flights[0]['flight-date'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-depart" value="<?= $flights[0]['flight-origin'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-start" value="<?= $flights[0]['flight-start'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-arrive" value="<?= $flights[0]['flight-destination'] ?>" type="text" />
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input size="14%" class="form-control" name="flight-end" value="<?= $flights[0]['flight-end'] ?>" type="text" />
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