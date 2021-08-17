<div class="dropdown d-inline-block">
    <button type="button" class="btn btn-danger" id="page-header-user-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">
          <i class="bx bx-caret-down"></i> Action
        </span>
        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end">

      <?php if(empty($delete)) {?>
        <!-- item-->
        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" title="<?php echo get_languageword('Delete_Selected'); ?>" onclick="set_fields('delete_selected', 'delete_selected');"><i class="bx bx-trash"></i> <?php echo get_languageword('delete'); ?>
        </a>

        <?php } if(empty($only_delete)) { ?>
        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" title="<?php echo get_languageword('Activate_Selected'); ?>" onclick="set_fields('activate_selected', 'activate_selected');"><i class="bx bx-check"></i> <?php echo get_languageword('activate'); ?>
        </a>

        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" title="<?php echo get_languageword('Deactivate_Selected'); ?>" onclick="set_fields('deactivate_selected', 'deactivate_selected');"><i class="bx bx-x"></i> <?php echo get_languageword('deactivate'); ?>
      </a>
         <?php } ?>
    </div>
</div>