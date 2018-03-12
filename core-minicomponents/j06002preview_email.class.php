
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
0
6
0
0
2
p
r
e
v
i
e
w
_
e
m
a
i
l

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
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
,
 
o
n
l
y
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
p
r
e
v
i
e
w
 
e
m
a
i
l
s
'
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
[
 
'
c
a
r
t
n
u
m
b
e
r
'
 
]
 
=
 
$
c
a
r
t
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
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
[
 
'
t
e
m
p
B
o
o
k
i
n
g
D
a
t
a
L
i
s
t
'
 
]
 
=
 
$
t
e
m
p
B
o
o
k
i
n
g
D
a
t
a
L
i
s
t
;

 
 
 
 
 
 
 
 
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
[
 
'
g
u
e
s
t
D
e
t
a
i
l
s
'
 
]
 
=
 
$
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
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
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
 
=
 
$
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
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
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
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
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

 
 
 
 
 
 
 
 
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
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
 
=
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
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
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
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
[
 
'
e
x
t
r
a
s
V
a
l
u
e
'
 
]
 
=
 
$
e
x
t
r
a
s
V
a
l
u
e
;

 
 
 
 
 
 
 
 
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
[
 
'
r
o
o
m
_
t
o
t
a
l
'
 
]
 
=
 
$
r
o
o
m
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
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
[
 
'
r
a
t
e
s
_
u
i
d
s
'
 
]
 
=
 
$
r
a
t
e
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
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
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
 
=
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
;

 
 
 
 
 
 
 
 
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
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
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
[
 
'
s
p
e
c
i
a
l
R
e
q
s
'
 
]
 
=
 
$
s
p
e
c
i
a
l
R
e
q
s
;

 
 
 
 
 
 
 
 
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
[
 
'
e
x
t
r
a
s
'
 
]
 
=
 
$
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
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
[
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
]
 
=
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;


 
 
 
 
 
 
 
 
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
[
 
'
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
'
 
]
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
/
/
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
1
0
0
'
,
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
;
 
/
/
 
G
e
n
e
r
a
t
e
 
h
o
t
e
l
 
c
o
n
f
i
r
m
a
t
i
o
n
 
e
m
a
i
l

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
1
1
0
'
,
 
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
;
 
/
/
 
G
e
n
e
r
a
t
e
 
g
u
e
s
t
 
c
o
n
f
i
r
m
a
t
i
o
n
 
e
m
a
i
l

 
 
 
 
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

