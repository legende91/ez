        {def $rubrics = fetch('content', 'list',hash(
	'parent_node_id',$node.node_id,
'class_filter_type','include',
'class_filter_array',array('sous_rubriquev2'),
'sort_by',array('priority',true()),
'depth',1
)
)
        }

        <div>
            <ul>
                {foreach $rubrics as $rubric}
                    <li>
                        <a href="/index.php/{$rubric.url_alias}">
                            {$rubric.name}
                        </a>
                       
                {/foreach}
            </ul>
        </div>
