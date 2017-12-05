files = ["arundel.th2.jpg","baldyFromCopper.th.jpg","baldyFromMeadow.th.jpg","bayerischeAlpen.th.jpg","bison1.th.jpg","bisonMud.th.jpg","bodiam2.th.jpg","bonnAltesRathaus.th.jpg","bonnUniversity.th.jpg","canyonLight.th.jpg","castleGeyser.th.jpg","dartmouth2.th.jpg","dartmouth4.th.jpg","dartmouth6.th.jpg","eastbourne.th.jpg","grandCanyon4.th2.jpg","grandCanyon6.th.jpg","grandPrismatic1.th.jpg","hever.th.jpg","hof2a.th2.jpg","HouseBonesRoof.th.jpg","jawsBridge.th.jpg","kinder.th.jpg","kingstonHill.th.jpg","leeds.th.jpg","lewes2.th.jpg","login.jpg","lowClouds.th.jpg","magicfountain.th.jpg","menu.jpg","mtWashburn.th.jpg","mvcma.th.jpg","neuschwanstein.th3.jpg","NewHampshire1.th.jpg","NewHampshire2.th.jpg","painesCreek.th2a.jpg","seabase11.th.jpg","seabase4.th.jpg","seabase5.th.jpg","seabase8.th.jpg","seabase.th.jpg","sheep.th.jpg","southDowns.th.jpg","southover.th.jpg","sparPole.th.jpg","startOfTrail.th.jpg","stPancras.th.jpg","tintagel.th.jpg","toothOfTime.th.jpg","trailSigns.th.jpg","umzug.th.jpg","upTheCanyon.th.jpg","vineyardHaven.th.jpg","westChop2.th.jpg","westChop.th2.jpg","yellowstoneLake.th.jpg"]

for i in files:
	file = open(i,"r");
	start = i.find(".");
	end = i.find(".",start+1)
	newfilename = i[:start] + i[end+1:];
	newfile = open(newfilename,"w")
	newfile.write(file.read())
