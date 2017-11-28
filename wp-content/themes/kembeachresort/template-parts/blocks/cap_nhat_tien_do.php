<div class="panel item">
    <div class="panel-heading" role="tab" id="heading1">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#project<?php echo $index; ?>" aria-expanded="true" aria-controls="project<?php echo $index; ?>" class="">
        <i class="fa fa-minus-square"></i>
                    <span><?php echo get_sub_field('name_project'); ?> – Cập nhật ngày <?php echo get_sub_field('date_update'); ?></span>
                </a>
                </h4>
    </div>
    <div id="project<?php echo $index; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
        <div class="panel-body">
            <div class="di-table">
                <div class="di-table-cell">
                        <?php echo get_sub_field('content'); ?>
                </div>
                <div class="di-table-cell"></div>
            </div>
        </div>
    </div>
</div>