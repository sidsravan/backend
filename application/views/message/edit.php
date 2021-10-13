<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Message Edit</h3>
            </div>
            <?php echo form_open('message/edit/'.$message['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="user_id" class="control-label"><span class="text-danger">*</span>User Id</label>
                        <div class="form-group">
                            <input type="text" name="user_id"
                                value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $message['user_id']); ?>"
                                class="form-control" id="user_id" />
                            <span class="text-danger"><?php echo form_error('user_id');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="to_id" class="control-label"><span class="text-danger">*</span>To Id</label>
                        <div class="form-group">
                            <input type="text" name="to_id"
                                value="<?php echo ($this->input->post('to_id') ? $this->input->post('to_id') : $message['to_id']); ?>"
                                class="form-control" id="to_id" />
                            <span class="text-danger"><?php echo form_error('to_id');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="accept_status" class="control-label"><span class="text-danger">*</span>Accept
                            Status</label>
                        <div class="form-group">
                            <input type="text" name="accept_status"
                                value="<?php echo ($this->input->post('accept_status') ? $this->input->post('accept_status') : $message['accept_status']); ?>"
                                class="form-control" id="accept_status" />
                            <span class="text-danger"><?php echo form_error('accept_status');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="del_status" class="control-label"><span class="text-danger">*</span>Del
                            Status</label>
                        <div class="form-group">
                            <input type="text" name="del_status"
                                value="<?php echo ($this->input->post('del_status') ? $this->input->post('del_status') : $message['del_status']); ?>"
                                class="form-control" id="del_status" />
                            <span class="text-danger"><?php echo form_error('del_status');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="cdate" class="control-label"><span class="text-danger">*</span>Cdate</label>
                        <div class="form-group">
                            <input type="text" name="cdate"
                                value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $message['cdate']); ?>"
                                class="form-control" id="cdate" />
                            <span class="text-danger"><?php echo form_error('cdate');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="mdate" class="control-label"><span class="text-danger">*</span>Mdate</label>
                        <div class="form-group">
                            <input type="text" name="mdate"
                                value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $message['mdate']); ?>"
                                class="form-control" id="mdate" />
                            <span class="text-danger"><?php echo form_error('mdate');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="msg" class="control-label"><span class="text-danger">*</span>From Msg</label>
                        <div class="form-group">
                            <textarea name="msg" class="form-control"
                                id="msg"><?php echo ($this->input->post('msg') ? $this->input->post('msg') : $message['msg']); ?></textarea>
                            <span class="text-danger"><?php echo form_error('msg');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="to_msg" class="control-label"><span class="text-danger">*</span>To Msg</label>
                        <div class="form-group">
                            <textarea name="to_msg" class="form-control"
                                id="to_msg"><?php echo ($this->input->post('to_msg') ? $this->input->post('to_msg') : $message['to_msg']); ?></textarea>
                            <span class="text-danger"><?php echo form_error('to_msg');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="block" class="control-label"><span class="text-danger">*</span>Block</label>
                        <div class="form-group">
                            <textarea name="block" class="form-control"
                                id="block"><?php echo ($this->input->post('block') ? $this->input->post('block') : $message['block']); ?></textarea>
                            <span class="text-danger"><?php echo form_error('block');?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>