<div class="page-content-wrapper">
    <div class="page-content">
        <?php $this->load->view('layout/app/partials/pagehead'); ?>
        <?php $this->load->view('layout/app/partials/breadcrumbs'); ?>
        <?php if(!empty($notification['type'])): ?>
            <div class="alert <?php echo ($notification['type'] == 'error') ? 'alert-danger' : 'alert-success'; ?>">
                <button class="close" data-close="alert"></button>
                <p><?php echo $notification['message']; ?></p>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view('app/'.$uri.'/sidebar'); ?>
                
                <div class="app-ticket app-ticket-list">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-pencil font-dark"></i>
                                        <span class="caption-subject sbold font-dark uppercase">ENTRY DATA</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="post" role="form" enctype="multipart/form-data" id="form_data">
                                        <div class="form-horizontal form-row-seperated">
                                            <div class="form-body">
                                                
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button> 
                                                    Cek form bertanda * (Wajib Diisi)
                                                </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> 
                                                    Sukses
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Title <span class="required"> * </span></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="title" value="<?php echo @$get_data['title']; ?>" data-required="1" class="form-control" placeholder="Task title">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Description</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="6" name="description"><?php echo @$get_data['description']; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Start Do Date <span class="required"> * </span></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="start_at" value="<?php if( !empty($get_data['id']) ) echo date('Y-m-d H:i', $get_data['start_at']); ?>" data-required="1" class="form-control date-picker" placeholder="Start Do Date">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">End Do Date <span class="required"> * </span></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="end_at" value="<?php if( !empty($get_data['id']) ) echo date('Y-m-d H:i', $get_data['end_at']); ?>" data-required="1" class="form-control date-picker" placeholder="End Do Date">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Image</label>
                                                    <div class="col-sm-6">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <?php if( !empty($get_data['image']) ): ?>
                                                                    <img src="<?php echo app_url( $path . 'thumb_'. $get_data['image'] ); ?>" alt="">
                                                                <?php else: ?>
                                                                    <img src="<?php echo $this->config->item('avatar'); ?>" alt="">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="image"> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php if( !empty($get_data['id']) ): ?>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-2 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <div class="checker">
                                                                        <span><input type="checkbox" name="status" <?php if($get_data['status'] == 1) echo 'checked'; ?>></span>
                                                                    </div> 
                                                                    Active
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                        
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="<?php echo app_url( $uri ); ?>" class="btn default">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>

<script type="text/javascript">
    $('.date-picker').datetimepicker();

    var FormValidation = function () {
        var handleValidation1 = function() {
            var form_data   = $('#form_data'),
                error       = $('.alert-danger', form_data),
                success     = $('.alert-success', form_data);

            form_data.validate({
                errorElement: 'span',
                errorClass  : 'help-block help-block-error',
                focusInvalid: false,
                ignore      : "",
                messages    : {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    }
                },
                rules: {
                    name: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) {      
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) {
                    $(element)
                        .closest('.form-group').addClass('has-error');
                },

                unhighlight: function (element) {
                    $(element)
                        .closest('.form-group').removeClass('has-error');
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error');
                },

                submitHandler: function (form) {
                    form.submit();
                }
            });
        }
        return {
            init: function () {
                handleValidation1();
            }
        };
    }();

    jQuery(document).ready(function() {
        FormValidation.init();
    });
</script>