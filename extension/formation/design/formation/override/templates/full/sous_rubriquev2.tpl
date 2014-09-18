        {def $sous_rubrics = fetch('content', 'list',hash(
	'parent_node_id',$node.node_id,
'class_filter_type','include',
'class_filter_array',array('articlev2'),
'sort_by',array('priority',true()),
'depth',1
)
)
        }


        <div>
            <ul>
                {foreach $sous_rubrics as $rubric}
                    <li>
                        <a href="/index.php/{$rubric.url_alias}">
                            {$rubric.name}
                        </a>
                       
                {/foreach}
            </ul>
        </div>
