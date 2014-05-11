<div <?php echo $options;?>>
	<?php
	if (!empty($filter)) {
		echo $filter;
	}
	?>
	<table>
		<?php
		if (!empty($header)) {
			?>
			<thead>
				<?php echo $header;?>
			</thead>
			<?php
		}

		if (!empty($rows)) {
			?>
			<tbody class="table-body">
				<?php echo $rows;?>
			</tbody>
			<?php
		} else {
			?>
			<tbody class="table-body">
				<tr class="table-row">
					<td colspan="<?php echo $amountOfColumns; ?>" style="text-align: center; font-weight: 700; color:red ;font-size: 15px;">
						<?php echo $noResultsMessage;?>
					</td>
				</tr>
			</tbody>
			<?php
		}

		if (!empty($pagination) || !empty($limit)) {
			?>
			<tfoot >
				<tr class="table-footer">
					<?php
					if(isset($pagination)) {?>
						<td class="pagination" colspan="<?php echo isset($limit) ? $amountOfColumns - 1 : $amountOfColumns; ?>">
							<?php echo $pagination;?>
						</td>
					<?php
					}
					if(isset($limit)) {
						?>
						<td class="limit">
							<?php echo $limit;?>
						</td>
						<?php
					}
					?>
				</tr>
			</tfoot>
			<?php
		}?>
	</table>
</div>