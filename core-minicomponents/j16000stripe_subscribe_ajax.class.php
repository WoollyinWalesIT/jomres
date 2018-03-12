
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
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
_
a
j
a
x

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
f
i
r
s
t
n
a
m
e
	
	
=
 
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
f
i
r
s
t
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
s
u
r
n
a
m
e
	
	
=
 
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
s
u
r
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
c
o
u
n
t
r
y
	
	
=
 
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
o
u
n
t
r
y
'
,
 
'
'
)
;

	
	
$
e
m
a
i
l
	
	
	
=
 
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
e
m
a
i
l
'
,
 
'
'
)
;

	
	
$
t
a
x
_
n
u
m
b
e
r
	
	
=
 
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
a
x
_
n
u
m
b
e
r
'
,
 
'
'
)
;


	
	
t
r
y
 
{

	
	
	
$
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
s
:
/
/
l
i
c
e
n
s
e
-
s
e
r
v
e
r
.
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
/
'
;

	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
/
s
h
o
p
/
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
.
p
h
p
?
f
i
r
s
t
n
a
m
e
=
'
.
$
f
i
r
s
t
n
a
m
e
.
'
&
s
u
r
n
a
m
e
=
'
.
$
s
u
r
n
a
m
e
.
'
&
c
o
u
n
t
r
y
=
'
.
$
c
o
u
n
t
r
y
.
'
&
e
m
a
i
l
=
'
.
$
e
m
a
i
l
.
'
&
t
a
x
_
n
u
m
b
e
r
=
'
.
$
t
a
x
_
n
u
m
b
e
r
;

	
	
	
	

	
	
	
/
/
 
M
a
n
y
 
u
s
e
r
s
 
w
i
l
l
 
b
e
 
i
n
s
t
a
l
l
i
n
g
 
o
n
 
l
o
c
a
l
h
o
s
t
 
e
t
c
,
 
w
h
e
r
e
 
s
e
l
f
s
i
g
n
e
d
 
c
e
r
t
i
f
i
c
a
t
e
s
 
m
a
y
 
n
o
t
 
b
e
 
s
e
t
 
u
p
 
c
o
r
r
e
c
t
l
y
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
w
i
l
l
 
d
i
s
a
b
l
e
 
v
e
r
i
f
i
c
a
t
i
o
n
 
o
f
 
c
e
r
t
s

	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i
,

	
	
	
	
'
v
e
r
i
f
y
'
 
=
>
 
f
a
l
s
e

	
	
	
]
)
;


	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;

	
	
	
	

	
	
	
$
r
e
s
u
l
t
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
	
}

	
	
c
a
t
c
h
 
(
C
l
i
e
n
t
E
r
r
o
r
R
e
s
p
o
n
s
e
E
x
c
e
p
t
i
o
n
 
$
e
x
c
e
p
t
i
o
n
)
 
{

	
	
	
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
_
f
e
e
d
b
a
c
k
 
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
_
f
e
e
d
b
a
c
k
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
'
C
o
u
l
d
 
n
o
t
 
g
e
t
 
c
o
u
n
t
r
i
e
s
 
l
i
s
t
'
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
$
e
x
c
e
p
t
i
o
n
-
>
g
e
t
R
e
s
p
o
n
s
e
(
)
-
>
g
e
t
B
o
d
y
(
t
r
u
e
)
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
)
;

	
	
}


	
	
e
c
h
o
 
$
r
e
s
u
l
t
;

 
 
 
 
}


 
 
 
 
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

