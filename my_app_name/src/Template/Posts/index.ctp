<div class="row">
    <div class="col-md-6">
        <h3>케이크로 만드는 게시판</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="" class="btn btn-primary"></a>
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
                <a href="" class="btn btn-warning">edit</a>
                <a href="" class="btn btn-danger">delete</a>                
            </td>
        </tr>
    <?php
        endforeach; 
    ?>
    </tbody>

</table>