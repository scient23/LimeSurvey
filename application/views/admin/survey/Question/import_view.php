<?php
/**
 * Import question : success
 */
?>

<?php renderBeginSidebody(getGlobalSetting('sideMenuBehaviour'), false); ?>
    <div class="row">
        <div class="col-lg-12 content-right">
            <div class="jumbotron message-box">
                <h2 class="text-success"><?php eT("Import Question") ?></h2>
                <p class="lead text-success"><?php eT("Success") ?></p>
                <p><?php eT("Question import summary") ?></p>
                <p>
                    <ul class="list-unstyled">
                        <li><?php echo gT("Questions") . ": " . $aImportResults['questions'] ?></li>
                        <li><?php echo gT("Subquestions") . ": " . $aImportResults['subquestions'] ?></li>
                        <li><?php echo gT("Answers") . ": " . $aImportResults['answers'] ?></li>
                        <?php if (strtolower($sExtension) == 'csv'):?>
                            <li><?php echo gT("Label sets") . ": " . $aImportResults['labelsets'] . " (" . $aImportResults['labels'] ?>)</li>
                        <?php endif;?>
                        <li><?php echo gT("Question attributes:") . $aImportResults['question_attributes'] ?></li>
                    </ul>                    
                </p>
                <p class="text-info"><?php eT("Question import is complete.") ?></p>
                <p>
                    <a href="<?php echo $this->createUrl('admin/questions/sa/view/surveyid/' . $surveyid . '/gid/' . $gid . '/qid/' . $aImportResults['newqid']) ?>"  class="btn btn-default btn-lg" /><?php eT("Go to question") ?></a>
                </p>
            </div>
        </div>
    </div>
</div>            
