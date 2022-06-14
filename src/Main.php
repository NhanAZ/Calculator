<?php

declare(strict_types=1);

namespace NhanAZ\Calculator;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	protected function onEnable() : void {
		$this->getLogger()->emergency("Absolutely do not use this plugin in production!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() === "calculator" && count($args) >= 1) {
			$hanlder = implode("", $args);
			$rerult = eval("return $hanlder;");
			$sender->sendMessage("Result: " . number_format($rerult, 2));
			return true;
		}
		return false;
	}
}
