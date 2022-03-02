<div class="col-md-7">
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Latest Orders</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td><?= $post->id; ?></td>
                                <td><?= $post->title; ?></td>
                                <?php if ($post->active == 0): ?>
                                    <td><span class="badge badge-danger badges">Inactive</span></td>
                                <?php else: ?>
                                    <td><span class="badge badge-success badges">Active</span></td>
                                <?php endif; ?>
                                <td><a href="<?= base_url('eshow/post/' . $post->id); ?>.html" class="btn-sm btn-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit faw"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            <a href="<?= base_url('admin/newpost.html'); ?>" class="btn btn-sm btn-danger float-right text-white">New Post</a>
            <a href="<?= base_url('admin/posts.html'); ?>" class="btn btn-sm btn-info float-left text-white">View All Posts</a>
        </div>
    </div>
</div>