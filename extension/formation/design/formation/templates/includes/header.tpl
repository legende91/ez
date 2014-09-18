        {def $rubrics = fetch('content', 'list',hash(
	'parent_node_id',2,
'class_filter_type','include',
'class_filter_array',array('rubrique'),
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