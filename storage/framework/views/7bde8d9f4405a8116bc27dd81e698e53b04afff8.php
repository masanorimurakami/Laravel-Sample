<head>
    <title>laravel Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container ops-main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="ops-title">書籍一覧</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <table class="table text-center">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">書籍名</th>
                    <th class="text-center">価格</th>
                    <th class="text-center">著者</th>
                    <th class="text-center">削除</th>
                </tr>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a href="/book/<?php echo e($book->id); ?>/edit"><?php echo e($book->id); ?></a>
                    </td>
                    <td><?php echo e($book->name); ?></td>
                    <td><?php echo e($book->price); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td>
                        <form action="/book/<?php echo e($book->id); ?>" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <button type="submit" class="btn btn-xs btn-denger" aria-label="Left Align">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <div>
                <a href="/book/create" class="btn btn-default">新規作成</a>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\toinx\Documents\php\sample\resources\views/book/index.blade.php ENDPATH**/ ?>