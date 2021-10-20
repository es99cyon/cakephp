<div class="row">
    <div class="col-md-6 offset-md-4">
        <div class="card">
            <div class="card-body">
                <?php echo $this->Form->create($posts) ?>
                <div class="form-group">
                    <?php echo $this->Form->input('name',['class'=>'form-control']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('detail',['class'=>'form-control']) ?>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
                <?php echo $this->Html->link('Back', ['action'=>'index'],['class'=>'btn btn-success']); ?>
                <?php echo $this->Form->end() ?>
            
            </div>
        </div>
    </div>
</div>