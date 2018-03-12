
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
.

 
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
s
a
v
e
_
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e

{

 
 
 
 
p
u
b
l
i
c
 
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
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
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
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
'
)
;

	
	

 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
_
n
a
m
e
	
	
	
=
 
(
s
t
r
i
n
g
)
 
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
P
O
S
T
,
 
'
t
e
m
p
l
a
t
e
_
n
a
m
e
'
,
 
'
'
)
;

	
	
$
t
e
m
p
l
a
t
e
_
p
a
t
h
	
	
	
=
 
(
s
t
r
i
n
g
)
 
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
P
O
S
T
,
 
'
t
e
m
p
l
a
t
e
_
p
a
t
h
'
,
 
'
'
)
;

	
	

	
	
/
/
 
O
l
d
e
r
 
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
 
p
l
u
g
i
n
s
 
h
a
d
 
t
e
m
p
l
a
t
e
s
 
i
n
 
t
h
e
 
t
e
m
p
l
a
t
e
 
r
o
o
t
.
 
W
e
 
a
r
e
 
e
x
t
e
n
d
i
n
g
 
h
e
r
e
 
t
o
 
a
l
l
o
w
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
f
i
l
e
s
 
t
o
 
e
x
i
s
t
 
i
n
 
b
o
o
t
s
t
r
a
p
 
s
p
e
c
i
f
i
c
 
v
e
r
s
i
o
n
 
d
i
r
e
c
t
o
r
i
e
s
.

	
	
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
t
e
m
p
l
a
t
e
_
p
a
t
h
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)
)
 
{

	
	
	
$
b
s
_
v
e
r
s
i
o
n
 
=
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
;

	
	
	
i
f
 
(
 
f
i
l
e
_
e
x
i
s
t
s
 
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
$
t
e
m
p
l
a
t
e
_
p
a
t
h
.
"
t
e
m
p
l
a
t
e
s
"
.
J
R
D
S
.
"
b
o
o
t
s
t
r
a
p
"
.
$
b
s
_
v
e
r
s
i
o
n
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)
 
)
 
{

	
	
	
	
$
t
e
m
p
l
a
t
e
_
p
a
t
h
 
=
 
$
t
e
m
p
l
a
t
e
_
p
a
t
h
.
"
t
e
m
p
l
a
t
e
s
"
.
J
R
D
S
.
"
b
o
o
t
s
t
r
a
p
"
.
$
b
s
_
v
e
r
s
i
o
n
.
J
R
D
S
;

	
	
	
}

	
	
}


	
	
$
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
t
e
m
p
l
a
t
e
_
n
a
m
e
'
]
	
=
 
$
t
e
m
p
l
a
t
e
_
n
a
m
e
;

	
	
$
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
	
	
	
	
=
 
a
d
d
s
l
a
s
h
e
s
(
$
t
e
m
p
l
a
t
e
_
p
a
t
h
)
;


	
	
$
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
-
>
s
a
v
e
_
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
(
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)
;

	
	

	
	
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
'
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
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
'
)
,
 
'
'
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

 
 
 
 
p
u
b
l
i
c
 
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

