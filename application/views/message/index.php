<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Messages Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('message/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>User Id</th>
                        <th>To Id</th>
                        <th>Accept Status</th>
                        <th>Del Status</th>
                        <th>Cdate</th>
                        <th>Mdate</th>
                        <th>From Msg</th>
                        <th>To Msg</th>
                        <th>Block</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($messages as $m){ ?>
                    <tr>
                        <td><?php echo $m['id']; ?></td>
                        <td><?php echo $m['user_id']; ?></td>
                        <td><?php echo $m['to_id']; ?></td>
                        <td><?php echo $m['accept_status']; ?></td>
                        <td><?php echo $m['del_status']; ?></td>
                        <td><?php echo $m['cdate']; ?></td>
                        <td><?php echo $m['mdate']; ?></td>
                        <td><?php echo $m['msg']; ?></td>
                        <td><?php echo $m['to_msg']; ?></td>
                        <td><?php echo $m['block']; ?></td>
                        <td>
                            <a href="<?php echo site_url('message/edit/'.$m['id']); ?>"
                                class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('message/remove/'.$m['id']); ?>"
                                class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>