<h1>Appointment Data</h1>
<br/>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Appointment Day</th>
            <th>Appointment Time</th>
            <th>Appointment Nature</th>
            <th>Status</th>
            <th>Submitted at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($appointment as $ap): ?>
            <tr>
                <td><?php echo $ap->id; ?></td>
                <td><?php echo $ap->name; ?></td>
                <td><?php echo $ap->email; ?></td>
                <td><?php echo $ap->phone; ?></td>
                <td><?php echo $ap->address; ?></td>
                <td><?php echo $ap->city; ?></td>
                <td><?php echo $ap->state; ?></td>
                <td><?php echo $ap->appointment_day; ?></td>
                <td><?php echo $ap->appointment_time; ?></td>
                <td><?php echo $ap->appointment_nature; ?></td>
                <td><?php echo $ap->status; ?></td>
                <td><?php echo $ap->create_date; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>