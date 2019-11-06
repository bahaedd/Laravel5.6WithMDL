<!doctype html>
	<html lang>
		@include('/Admin/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/Admin/include/headerUser')
			     @include('/Admin/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Messages</h2>                            
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>View</th>
                                                <th>Respond</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach($data as $message)
                                            <tr>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td><div style="max-width: 500px;  overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $message->message }}</div></td>
                                              <td>
                                                    <a href="{{ route('Messages.show',$message->id) }}" class="mdl-link">
												  		<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">remove_red_eye</i>
														</button>
												  	</a>
                                                </td>
                                                <td>
													{{ Form::open(array('route' => array('Messages.reply', $message->email), 'method' => 'reply')) }}
														<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">reply</i>
														</button>
													{{ Form::close() }}
                                                </td>
                                                <td>
													{{ Form::open(array('route' => array('Messages.destroy', $message->id), 'method' => 'delete')) }}
														<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">delete</i>
														</button>
													{{ Form::close() }}
                                                </td>
                                            </tr>
											@endforeach
                                        </tbody>
                                     
									</table>
									<div class=mdl-grid>
                                     <div class="mdl-cell mdl-cell--12-col">
										{{ $data->render() }}
                            		</div>
									</div>
								</div>
							</div>
					</div>
				</main>
				@include('/Admin/include/footerUser')
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>