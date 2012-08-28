<div class="modal hide fade" id="modals_printPage">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Print Page</h3>
    </div>
    <div class="modal-body">
        <div class="control-group">
            <ul class="nav nav-tabs nav-stacked">
                <li>
                    <a _href="<?=site_url("/printpage/output?page=")?>testSelect" class="f_ajaxPrint" href="javascript:void(0);">testSelect</a>
                </li>
                <li>
                    <a _href="<?=site_url("/printpage/output?page=")?>testCn" class="f_ajaxPrint" href="javascript:void(0);">testCn</a>
                </li>
                <li>
                    <a _href="<?=site_url("/printpage/output?page=")?>testArr" class="f_ajaxPrint" href="javascript:void(0);">testArr</a>
                </li>
                <li>
                    <a _href="<?=site_url("/printpage/output?page=")?>testAudio" class="f_ajaxPrint" href="javascript:void(0);">testAudio</a>
                </li>
                <li>
                    <a _href="<?=site_url("/printpage/output?page=")?>jsCommon" class="f_ajaxPrint" href="javascript:void(0);">common.js</a>
                </li>
                <li>
                	<a _href="<?=site_url("/printpage/output?page=")?>category" class="f_ajaxPrint" href="javascript:void(0);" id="f_printCate">Print Page</a>
                </li>
            </ul>
            <div class="alert alert-info f_ajaxEndPrint none">
            	<a class="close" data-dismiss="alert">×</a><strong>Info&nbsp;&nbsp;</strong>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

