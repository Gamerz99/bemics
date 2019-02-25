<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 2);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "Portfolio ";
$data['mainmenu'] = $mainmenu;
$data['profinf'] = $prof_inf;
$data['userinf'] = $session_data;
if (isset($msg)) {
    $data['msg'] = $this->messages->getMessage($msg);
}
$this->load->view('layout/header2', $data);
?>
<div class="content-wrapper" role="main">
    <div class="">
        <section class="content-header">
            <h3>
                Portfolio
            </h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Portfolio</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body ">
                                <a href="<?php echo base_url(); ?>admin/portfolios/add_portfolio"  type="button" class="btn btn-success pull-right ">
                                    Add New Image
                                </a>
                            </div>
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-striped dataTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Title </th>
                                        <th> Image </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($portfolios)){
                                        foreach ($portfolios as $portfolio) { ?>
                                            <tr>
                                                <td> <?php echo $portfolio['id'] ?></td>
                                                <td> <?php echo $portfolio['title'] ?></td>
                                                <td> <a href="<?php echo base_url(); ?>flayout/images/portfolio/<?php echo $portfolio['image'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>flayout/images/portfolio/<?php echo $portfolio['image'] ?>"/> </a> </td>
                                                <td class="center">
                                                    <?php echo form_open('admin/portfolios/delete_portfolio', 'id="frm1' . $portfolio['id'] . '"'); ?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>admin/portfolios/add_portfolio/<?php echo $portfolio['id'] ?>"
                                                           class="btn btn-block btn-success">   <i
                                                                class="fa fa-pencil"></i></a>
                                                    </span>
                                                    <span class="btn-group">
                                                        <?php
                                                        echo form_hidden('id', $portfolio['id']);
                                                        echo '<a href="#" class="btn btn-block btn-danger" onclick="confirm_delete(' . $portfolio['id'] . ')" > <i class="fa fa-close"></i> </a>';
                                                        ?>
                                                    </span>
                                                    <?php echo form_close(); ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
$this->load->view('layout/footer2');
?>





