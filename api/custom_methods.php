
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
u
s
t
o
m
 
F
l
i
g
h
t
 
m
e
t
h
o
d
s
 
t
h
a
t
 
f
o
r
m
a
t
 
j
s
o
n
 
r
e
s
p
o
n
s
e
s

 
*

 
*
 
C
u
s
t
o
m
i
s
e
d
 
m
e
t
h
o
d
s
 
f
o
r
 
t
h
e
 
F
l
i
g
h
t
 
f
r
a
m
e
w
o
r
k
 
t
h
a
t
 
i
s
 
u
s
e
d
 
b
y
 
t
h
e
 
R
E
S
T
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
.
 
T
h
e
s
e
 
m
e
t
h
o
d
s
 
a
l
l
o
w
 
u
s
 
t
o
 
i
n
c
l
u
d
e
 
l
o
g
g
i
n
g
 
t
h
r
o
u
g
h
 
M
o
n
o
l
o
g
.
 
A
l
s
o
 
f
o
r
m
a
t
s
 
t
h
e
 
A
P
I
 
r
e
s
p
o
n
s
e
 
i
n
 
a
n
 
e
n
v
e
l
o
p
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
.

 
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


 
 
 
 
F
l
i
g
h
t
:
:
m
a
p
(
'
j
s
o
n
'
,
 
f
u
n
c
t
i
o
n
 
(
$
r
e
s
p
o
n
s
e
_
n
a
m
e
,
 
$
d
a
t
a
,
 
$
c
o
d
e
 
=
 
2
0
0
,
 
$
e
n
c
o
d
e
 
=
 
t
r
u
e
,
 
$
c
h
a
r
s
e
t
 
=
 
'
u
t
f
-
8
'
)
 
{

 
 
 
 
 
 
 
 
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
 
R
e
p
l
i
e
d
 
w
i
t
h
 
c
o
d
e
 
'
.
$
c
o
d
e
,
 
'
A
P
I
'
,
 
'
I
N
F
O
'
 
,
 
'
 
R
e
p
l
i
e
d
 
w
i
t
h
 
c
o
d
e
 
'
.
$
c
o
d
e
.
'
 
a
n
d
 
c
o
n
t
e
n
t
s
'
.
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
d
a
t
a
)
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
-
>
d
a
t
a
[
$
r
e
s
p
o
n
s
e
_
n
a
m
e
]
 
=
 
$
d
a
t
a
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
-
>
m
e
t
a
[
'
c
o
d
e
'
]
 
=
 
$
c
o
d
e
;

 
 
 
 
 
 
 
 
$
j
s
o
n
 
=
 
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
r
e
s
p
o
n
s
e
)
;

 
 
 
 
 
 
 
 
F
l
i
g
h
t
:
:
r
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
s
t
a
t
u
s
(
$
c
o
d
e
)

 
 
 
 
 
 
 
 
 
 
 
 
-
>
h
e
a
d
e
r
(
'
C
o
n
t
e
n
t
-
T
y
p
e
'
,
 
'
a
p
p
l
i
c
a
t
i
o
n
/
j
s
o
n
;
 
c
h
a
r
s
e
t
=
'
.
$
c
h
a
r
s
e
t
)

 
 
 
 
 
 
 
 
 
 
 
 
-
>
w
r
i
t
e
(
$
j
s
o
n
)

 
 
 
 
 
 
 
 
 
 
 
 
-
>
s
e
n
d
(
)
;

	
	
	
e
x
i
t
;

 
 
 
 
}
)
;


 
 
 
 
F
l
i
g
h
t
:
:
m
a
p
(
'
h
a
l
t
'
,
 
f
u
n
c
t
i
o
n
 
(
$
c
o
d
e
 
=
 
2
0
0
,
 
$
m
e
s
s
a
g
e
 
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
l
o
g
 
=
 
'
 
H
a
l
t
e
d
 
r
u
n
 
'
.
$
c
o
d
e
.
'
 
w
i
t
h
 
m
e
s
s
a
g
e
 
'
.
$
m
e
s
s
a
g
e
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
$
l
o
g
,
 
'
A
P
I
'
,
 
'
I
N
F
O
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
-
>
m
e
t
a
[
'
c
o
d
e
'
]
 
=
 
$
c
o
d
e
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
-
>
m
e
t
a
[
'
e
r
r
o
r
_
m
e
s
s
a
g
e
'
]
 
=
 
$
m
e
s
s
a
g
e
;

 
 
 
 
 
 
 
 
$
j
s
o
n
 
=
 
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
r
e
s
p
o
n
s
e
)
;

 
 
 
 
 
 
 
 
F
l
i
g
h
t
:
:
r
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
s
t
a
t
u
s
(
$
c
o
d
e
)

 
 
 
 
 
 
 
 
 
 
 
 
-
>
w
r
i
t
e
(
$
j
s
o
n
)

 
 
 
 
 
 
 
 
 
 
 
 
-
>
s
e
n
d
(
)
;

	
	
	
e
x
i
t
;

 
 
 
 
}
)
;

