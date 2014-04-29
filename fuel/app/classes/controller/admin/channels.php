<?php
use \Model\Channel;

class Controller_Admin_Channels extends Controller_Admin {

	public function action_index()
	{
		$data['channels'] = Channel::index_channels();

		// var_dump($data['channels'][0]['@graph'][1]['@id']);
		// echo '<br>';
		// echo '<br>';
		// foreach ($data['channels'] as $channel) 
		// {
		// 	foreach ($channel as $infoType => $info) 
		// 	{
		// 		if($infoType == '@graph')
		// 		{
		// 			foreach ($info as $detailType => $detail) 
		// 			{
		// 				if($detail['@type'] != null)
		// 				{
		// 					if($detail['@type'] == 'ewe:Channel' )
		// 					{
		// 						var_dump($detail['@id']);
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// }


		$this->template->title = "Channels";
		$this->template->content = View::forge('admin/channels/index', $data);
	}

	public function action_view($id = null)
	{
		$data['channel'] = Channel::find_channel($id);
		$channel['graph'] = $data['channel']['@graph'];

		$this->template->title = "Channel";
		$this->template->content = View::forge('admin/channels/view', $channel);

	}
}

?>