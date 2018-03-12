
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
c
m
s
_
u
s
e
r
s
_
f
i
n
d

	
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
s
e
a
r
c
h
_
s
t
r
i
n
g
 
=
 
t
r
i
m
(
 
s
t
r
t
o
l
o
w
e
r
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
t
e
r
m
'
,
 
'
'
 
)
 
)
 
)
;


	
	
$
e
x
i
s
t
i
n
g
_
m
a
n
a
g
e
r
s
 
=
 
a
r
r
a
y
 
(
)
;

	
	

	
	
/
/
g
e
t
 
a
l
l
 
j
o
m
r
e
s
 
u
s
e
r
 
i
d
s

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
u
s
e
r
i
d
`
 
A
S
 
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
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
 
$
q
u
e
r
y
 
)
;

	
	

	
	
f
o
r
e
a
c
h
 
(
 
$
r
e
s
u
l
t
 
a
s
 
$
r
 
)

	
	
	
{

	
	
	
$
e
x
i
s
t
i
n
g
_
m
a
n
a
g
e
r
s
[
]
 
=
 
$
r
-
>
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
;

	
	
	
}


	
	
/
/
f
i
n
d
 
c
m
s
 
u
s
e
r
s
 
t
h
a
t
 
m
a
t
c
h
 
t
e
r
m

	
	
$
c
m
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
c
m
s
s
p
e
c
i
f
i
c
_
f
i
n
d
_
c
m
s
_
u
s
e
r
s
(
$
s
e
a
r
c
h
_
s
t
r
i
n
g
)
;

	
	

	
	
i
f
 
(
 
e
m
p
t
y
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
s
 
)
 
)
 

	
	
	
{

	
	
	
e
c
h
o
 
"
"
;

	
	
	
d
i
e
(
)
;

	
	
	
}

	
	
e
l
s
e

	
	
	
{

	
	
	
$
u
s
e
r
s
_
a
r
r
a
y
 
=
 
a
r
r
a
y
 
(
)
;

	
	
	
$
i
 
=
 
0
;

	
	
	

	
	
	
f
o
r
e
a
c
h
 
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
s
 
a
s
 
$
r
 
)

	
	
	
	
{

	
	
	
	
i
f
 
(
 
$
r
[
 
'
u
s
e
r
n
a
m
e
'
 
]
 
!
=
=
 
n
u
l
l
 
&
&
 
!
i
n
_
a
r
r
a
y
(
 
$
r
[
 
'
i
d
'
 
]
,
 
$
e
x
i
s
t
i
n
g
_
m
a
n
a
g
e
r
s
 
)
 
)

	
	
	
	
	
{

	
	
	
	
	
$
u
s
e
r
s
_
a
r
r
a
y
[
 
$
i
 
]
[
 
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
 
]
 
=
 
$
r
[
 
'
i
d
'
 
]
;

	
	
	
	
	
$
u
s
e
r
s
_
a
r
r
a
y
[
 
$
i
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
 
=
 
$
r
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

	
	
	
	
	
}

	
	
	
	

	
	
	
	
$
i
+
+
;

	
	
	
	
}


	
	
	
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
 
$
u
s
e
r
s
_
a
r
r
a
y
 
)
;

	
	
	
d
i
e
(
)
;

	
	
	
}

	
	
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

