
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


f
u
n
c
t
i
o
n
 
j
r
_
s
u
b
s
t
r
(
$
s
t
r
,
 
$
a
r
g
1
,
 
$
a
r
g
2
)

{

 
 
 
 
i
f
 
(
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
m
b
_
s
u
b
s
t
r
'
)
)
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
s
u
b
s
t
r
(
$
s
t
r
,
 
$
a
r
g
1
,
 
$
a
r
g
2
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
m
b
_
s
u
b
s
t
r
(
$
s
t
r
,
 
$
a
r
g
1
,
 
$
a
r
g
2
,
 
'
U
T
F
-
8
'
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
j
r
_
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
$
s
t
r
)

{

 
 
 
 
i
f
 
(
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
m
b
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
$
s
t
r
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
m
b
_
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
$
s
t
r
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
j
r
_
u
c
w
o
r
d
s
(
$
s
t
r
)

{

 
 
 
 
r
e
t
u
r
n
 
m
b
_
u
c
w
o
r
d
s
(
$
s
t
r
)
;

}


i
f
 
(
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
m
b
_
u
c
w
o
r
d
s
'
)
)
 
{

 
 
 
 
f
u
n
c
t
i
o
n
 
m
b
_
u
c
w
o
r
d
s
(
$
s
t
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
m
b
_
c
o
n
v
e
r
t
_
c
a
s
e
(
$
s
t
r
,
 
M
B
_
C
A
S
E
_
T
I
T
L
E
,
 
'
U
T
F
-
8
'
)
;

 
 
 
 
}

}

