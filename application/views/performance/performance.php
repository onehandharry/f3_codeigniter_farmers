<h1> Performance </h1>

<table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Output(litres)</th>		
          </tr>
        </thead>
        <tbody>

<?php	foreach ($result as $row){ ?>

           <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['surname']; ?></td>
            <td><?php echo $row['output']; ?></td>		
          </tr>


<?php } //close foreach loop ?>

        </tbody>
</table>