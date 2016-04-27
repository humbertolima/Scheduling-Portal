<div>
    <div>
        <h2>Current Flights</h2>
    </div>
    <table width=100% class="table">
        <thead>
            <tr>
                <td><b>Flight Number</b></td>
                <td><b>Crew</b></td>
                <td><b>Date</b></td>
                <td><b>Depart</b></td>
                <td><b>Start Time</b></td>
                <td><b>Arrive</b></td>
                <td><b>End Time</b></td>
                <td><b>Assigned</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
                <tr>
                    <td>
                        <?= $flight["flight-number"] ?>
                    </td>
                    <td width="30%" style="font-size:9px">
                        <?php if ($flight["assigned"] == 1): ?>
                            <table>
                                <tr>
                                    Cpt:
                                    <?= $flight["captain"] ?> | FO:
                                        <?= $flight["first-officer"] ?> | FAL:
                                            <?= $flight["fa-lead"] ?> | FA1:
                                                <?= $flight["fa-1"] ?>
                                </tr>
                                <tr>
                                    FA2:
                                    <?= $flight["fa-2"] ?> | FA3:
                                        <?= $flight["fa-3"] ?> | FA4:
                                            <?= $flight["fa-4"] ?> | FA5:
                                                <?= $flight["fa-5"] ?>
                                </tr>
                            </table>
                            <?php else: ?>

                                <?php endif ?>
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
                    <td>
                        <?php if ($flight["assigned"] == 1): ?>
                            <svg height="30" width="30">
                                <circle cx="15" cy="15" r="7" stroke="black" stroke-width="1" fill="green" />
                            </svg>
                            <?php else: ?>
                                <svg height="30" width="30">
                                    <circle cx="15" cy="15" r="7" stroke="black" stroke-width="1" fill="red" />
                                </svg>
                                <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</div>