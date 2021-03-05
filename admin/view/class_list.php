<<?php require('header.php'); ?> <main class="container">
    <section class="mt-2 mb-2">
        <h2>Vehicle Class List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $class) { ?>
                    <tr>
                        <td><?php echo $class['class']; ?></td>
                        <td>
                            <form action="index.php" method="POST">
                                <input type="hidden" name="class_id" value="<?php echo $class['id']; ?>">
                                <input type="hidden" name="action" value="delete_class">
                                <button class="btn-close" aria-label="Delete"></button>
                            </form>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>
    <section>
        <h2>Add Class</h2>
    </section>
    <section>
        <p><a href="index.php?action=show_add_vehicle_form">Click here</a> to add a vehicle</p>
        <p><a href="index.php?action=show_makes_form">View/Edit Vehicle Makes</a></p>
        <p><a href="index.php?action=show_types_form">View/Edit Vehicle Types</a></p>
        <p><a href="index.php?action=show_classes_form">View/Edit Vehicle Classes</a></p>
    </section>

    </main>

    <?php require('footer.php'); ?>