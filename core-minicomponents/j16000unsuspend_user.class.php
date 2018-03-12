
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*
 
@
p
a
c
k
a
g
e
 
J
o
m
r
e
s

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y
.

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
 
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
 
)
 
o
r
 
d
i
e
(
 
'
'
 
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
1
6
0
0
0
u
n
s
u
s
p
e
n
d
_
u
s
e
r

	
{

	
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

	
	
{

	
	
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
 
'
m
c
H
a
n
d
l
e
r
'
 
)
;

	
	
i
f
 
(
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
)

	
	
	
{

	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


	
	
	
r
e
t
u
r
n
;

	
	
	
}

	
	

	
	
$
c
m
s
_
u
s
e
r
_
i
d
 
=
 
i
n
t
v
a
l
(
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
R
E
Q
U
E
S
T
,
 
'
c
m
s
_
u
s
e
r
_
i
d
'
,
 
0
 
)
 
)
;

	
	

	
	
i
f
 
(
 
$
c
m
s
_
u
s
e
r
_
i
d
 
=
=
 
0
 
)

	
	
	
{

	
	
	
r
e
t
u
r
n
;

	
	
	
}


	
	
$
j
o
m
r
e
s
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
u
s
e
r
s
'
)
;

	
	

	
	
i
f
 
(
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
g
e
t
_
u
s
e
r
(
 
$
c
m
s
_
u
s
e
r
_
i
d
 
)
 
)

	
	
	
{

	
	
	
j
r
_
i
m
p
o
r
t
(
 
'
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
'
 
)
;

	
	
	
$
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
(
)
;

	
	
	
$
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
-
>
s
e
t
_
m
a
n
a
g
e
r
_
i
d
(
 
$
c
m
s
_
u
s
e
r
_
i
d
 
)
;

	
	
	
$
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
-
>
u
n
s
u
s
p
e
n
d
_
m
a
n
a
g
e
r
(
)
;

	
	
	
$
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
-
>
p
u
b
l
i
s
h
_
m
a
n
a
g
e
r
s
_
p
r
o
p
e
r
t
i
e
s
(
)
;

	
	
	
}


	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
 
.
 
"
&
t
a
s
k
=
l
i
s
t
_
u
s
e
r
s
"
 
)
,
 
"
"
 
)
;

	
	
}


	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

	
	
{

	
	
r
e
t
u
r
n
 
n
u
l
l
;

	
	
}

	
}

