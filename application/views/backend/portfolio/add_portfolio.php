
<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 2);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "ADD PORTFOLIO";
$data['mainmenu'] = $mainmenu;
$data['profinf'] = $prof_inf;
$data['userinf'] = $session_data;
if (isset($msg)) {
    $data['msg'] = $this->messages->getMessage($msg);
}
$this->load->view('layout/header2', $data);
?>
<div class="content-wrapper" >
    <section class="content-header">
        <h3>
            Add Portfolio
        </h3>
        <ol class="breadcrumb">
            <li class="fa fa-dashboard active"> Add Portfolio</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">please add/edit image</h3>
            </div>

            <div class="box-body">
                <?php echo form_open_multipart('admin/portfolios/save_portfolio', 'id="form1" data-parsley-validate class=""'); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label class="control-label" for="first-name"> Title <span class="required">*</span>
                        </label>
                        <?php
                        echo form_hidden('id', $portfolio['id']);
                        echo form_input('title', $portfolio['title'], 'class="form-control col-md-7 col-xs-12"');
                        ?>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="control-label" for="first-name"> Image
                        </label>
                        <div>
                            <input type="file" name="image" size="20" />
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button class="btn btn-primary btn" type="reset">Reset</button>
                    <button type="submit" value="Validate!" class="btn btn-success pull-right">Submit</button>
                </div>
                <?php echo form_close(); ?>
            </div>

        </div>
    </section>
</div>
<?php
$this->load->view('layout/footer2');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>layout/js/jquery.validate.js"></script>
<script>
    $(document).ready(function () {
            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Please enter only letters without space.");
            $("#form1").validate({
                errorElement: "p",
                rules: {
                    title: {
                        required: true
                    }
                },
                errorPlacement: function (error, element) {
                    error.appendTo(element.parent());
                }
            });
        }
    );
</script>
