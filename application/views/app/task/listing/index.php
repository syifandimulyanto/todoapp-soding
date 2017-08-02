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
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase"><?php echo $page['title']; ?></span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?php if( isset($create_url) ): ?>
                                                    <div class="btn-group">
                                                        <a href="<?php echo $create_url; ?>" class="btn sbold green"> Add New
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="tabbable-custom">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_active" data-toggle="tab" aria-expanded="true"> 
                                                    Active <span class="badge badge-success"> <?php echo $get_data_active_cnt; ?> </span> 
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab_pending" data-toggle="tab" aria-expanded="false"> 
                                                    Pending <span class="badge badge-success"> <?php echo $get_data_pending_cnt; ?> </span> 
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab_trash" data-toggle="tab" aria-expanded="false"> 
                                                    Trash <span class="badge badge-success"> <?php echo $get_data_trash_cnt; ?> </span> 
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_active">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column tabledata">
                                                    <thead>
                                                        <tr>
                                                            <th>#NO</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>To Date</th>
                                                            <th>Create At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            if( $get_data_active_cnt > 0 ):
                                                            $no=1;
                                                            foreach ($get_data_active as $key => $val):
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?php echo $val['title']; ?></td>
                                                                <td><?php echo $val['description']; ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['start_at']).' - '. date('d, M Y H:i s', $val['end_at']); ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['create_at']); ?></td>
                                                                <td>
                                                                    <a href="<?php echo app_url( $uri ).'/update/'.$val['id'] ?>" class="btn btn-sm green btn-outline filter-submit">
                                                                        <i class="fa fa-pencil"></i> Edit 
                                                                    </a>
                                                                    <a href="<?php echo app_url( $uri ).'/delete/'.$val['id'] ?>" class="btn btn-sm red btn-outline filter-submit" onclick="return confirmDelete($(this));">
                                                                        <i class="fa fa-trash-o"></i> Delete 
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php 
                                                            $no++;
                                                            endforeach;
                                                            else:
                                                        ?>
                                                        <tr>
                                                            <td colspan="6">Data not found</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab_pending">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column tabledata">
                                                    <thead>
                                                        <tr>
                                                            <th>#NO</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>To Date</th>
                                                            <th>Create At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            if( $get_data_pending_cnt > 0 ):
                                                            $no=1;
                                                            foreach ($get_data_pending as $key => $val):
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?php echo $val['title']; ?></td>
                                                                <td><?php echo $val['description']; ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['start_at']).' - '. date('d, M Y H:i s', $val['end_at']); ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['create_at']); ?></td>
                                                                <td>
                                                                    <a href="<?php echo app_url( $uri ).'/update/'.$val['id'] ?>" class="btn btn-sm green btn-outline filter-submit">
                                                                        <i class="fa fa-pencil"></i> Edit 
                                                                    </a>
                                                                    <a href="<?php echo app_url( $uri ).'/delete/'.$val['id'] ?>" class="btn btn-sm red btn-outline filter-submit" onclick="return confirmDelete($(this));">
                                                                        <i class="fa fa-trash-o"></i> Delete 
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php 
                                                            $no++;
                                                            endforeach;
                                                            else:
                                                        ?>
                                                        <tr>
                                                            <td colspan="6">Data not found</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab_trash">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column tabledata">
                                                    <thead>
                                                        <tr>
                                                            <th>#NO</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>To Date</th>
                                                            <th>Create At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            if( $get_data_trash_cnt > 0 ):
                                                            $no=1;
                                                            foreach ($get_data_trash as $key => $val):
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?php echo $val['title']; ?></td>
                                                                <td><?php echo $val['description']; ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['start_at']).' - '. date('d, M Y H:i s', $val['end_at']); ?></td>
                                                                <td><?php echo date('d, M Y H:i s', $val['create_at']); ?></td>
                                                                <td>
                                                                    <a href="<?php echo app_url( $uri ).'/cancel_delete/'.$val['id'] ?>" class="btn btn-sm yellow btn-outline filter-submit">
                                                                        <i class="fa fa-check"></i> Cancel Delete 
                                                                    </a>
                                                                    <a href="<?php echo app_url( $uri ).'/delete_permanent/'.$val['id'] ?>" onclick="return confirmDelete($(this));" class="btn btn-sm red btn-outline filter-submit">
                                                                        <i class="fa fa-trash-o"></i> Delete Permanent
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php 
                                                            $no++;
                                                            endforeach;
                                                            else:
                                                        ?>
                                                        <tr>
                                                            <td colspan="6">Data not found</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>