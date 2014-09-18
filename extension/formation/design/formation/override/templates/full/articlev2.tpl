<div>
    <ul>
     
        <h1> Titre :</h1> {$node.data_map.titre.content}<br />
<b> Sous titre : </b>
{if eq($node.data_map.sous_titre.content, '')}
    <p>Aucun sous Titre</p><br />
 {else}
     {$node.data_map.sous_titre.content}<br />
{/if}
   
<b> Déscription :</b>
{if is_null($node.data_map.descrption.content.input.input_xml)}
<p>Aucune déscription</p>
{else}
    {$node.data_map.descrption.content.input.input_xml}<br />
{/if}
    
    
<b> Image : </b>
{if is_null($node.data_map.nom_image.content.tresgrand.url)} 
<p>No Image</p><br />
{else}
    <img src="/{$node.data_map.nom_image.content.tresgrand.url}"/><br />
{/if}
        
        
        
<b> Lien :</b> 
 {if is_null($node.data_map.nom_lien.content)} 
<p>Pas de lien</p><br />
{else}
    <a href="{$node.data_map.nom_lien.content}">{$node.data_map.nom_lien.object.name}</a><br />
{/if}
            
        
<b> Date de publication :</b> {$node.data_map.date_publi.content.day}.{$node.data_map.date_publi.content.month}.{$node.data_map.date_publi.content.year}<br />
        
    </ul>
</div>
