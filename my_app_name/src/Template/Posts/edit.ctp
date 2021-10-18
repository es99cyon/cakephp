<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <?php echo $this->Form->create($posts) ?>
                <div class="form-group">
                    <?php echo $this->Form->input('name', ['value'=>$name, 'class'=>'form-control']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('detail', ['value'=>$detail, 'class'=>'form-control']) ?>
                </div>
                <?php echo $this->Form->button('Update', ['class', 'btn btn-warning']) ?>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>