<div class="row">
    <div class="col-md-6">
        <h3>케이크로 만드는 게시판</h3>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $this->Html->link('Add Data', ['action'=>'add'],['class'=>'btn btn-primary']) ?>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>framework</th>
            <th width="160">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($posts as $post):
        ?>
        <tr>
            <td><?php echo $post->id ?></td>
            <td><?php echo $post->name ?></td>
            <td><?php echo $post->detail ?></td>
            <td>
                <?php echo $this->Html->link('Edit', ['action'=>'edit', $post->id], [ 'class'=>'btn btn-warning']) ?>
                <?php echo $this->Form->postLink('Delete', ['action'=>'delete', $post->id], ['class'=>'btn btn-danger', 'confirm'=>'are you sure?']) ?>                
            </td>
        </tr>
    <?php
        endforeach; 
    ?>
    </tbody>
</table>
<?php
$paginator = $this->Paginator->setTemplates([
    'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'first' => '<li class="page-item"><a href="{{url}}" class="page-link">&laquo</a></li>',
    'last' => '<li class="page-item"><a href="{{url}}" class="page-link">&raquo</a></li>',
    'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&lt</a></li>',
    'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&gt</a></li>'
    
]);
?>
<nav>
    <ul class="pagination">
        <?php
        echo $paginator->first();
        if($paginator->hasPrev()) {
            echo $paginator->prev();
        }
        echo $paginator->numbers();
        if($paginator->hasNext()) {
            echo $paginator->next();
        }
        echo $paginator->last();
        ?>
    </ul>
</nav>