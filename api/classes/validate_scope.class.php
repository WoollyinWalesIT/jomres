
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
n
f
i
r
m
s
 
t
h
a
t
 
t
h
e
 
k
e
y
 
p
a
i
r
 
h
a
s
 
b
e
e
n
 
g
i
v
e
n
 
r
i
g
h
t
s
 
t
o
 
t
h
e
 
s
c
o
p
e

 
*

 
*
 
K
e
y
 
p
a
i
r
s
 
h
a
v
e
 
t
o
 
h
a
v
e
 
b
e
e
n
 
g
i
v
e
n
 
r
i
g
h
t
s
 
t
o
 
a
 
s
c
o
p
e
 
(
e
.
g
.
 
g
e
t
_
p
r
o
p
e
r
t
y
,
 
s
e
t
_
p
r
o
p
e
r
t
y
 
e
t
c
)
.
 
T
h
e
 
s
c
o
p
e
s
 
a
v
a
i
l
a
b
l
e
 
t
o
 
t
h
e
 
k
e
y
p
a
i
r
 
h
a
v
e
 
a
l
r
e
a
d
y
 
b
e
e
n
 
d
e
t
e
r
m
i
n
e
d
 
b
y
 
i
n
d
e
x
.
p
h
p
,
 
h
e
r
e
 
w
e
 
w
i
l
l
 
c
h
e
c
k
 
t
h
a
t
 
t
h
e
 
s
c
o
p
e
 
i
n
 
q
u
e
s
t
i
o
n
 
i
s
 
a
l
l
o
w
e
d
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


/
*
*

*

*
 
C
o
n
f
i
r
m
s
 
t
h
a
t
 
a
 
k
e
y
 
p
a
i
r
 
h
a
s
 
r
i
g
h
t
s
 
t
o
 
a
 
s
c
o
p
e
.

*

*
/

c
l
a
s
s
 
v
a
l
i
d
a
t
e
_
s
c
o
p
e

{

	
/
*
*

	
*

	
*
 
C
o
n
s
t
r
u
c
t
o
r

	
*

	
*
/

 
 
 
 
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
u
s
e
r
_
s
c
o
p
e
s
)

 
 
 
 
{

 
 
 
 
}


	
/
*
*

	
*

	
*
 
C
o
n
f
i
r
m
s
 
o
r
 
d
e
n
y
s
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
t
h
e
 
k
e
y
 
p
a
i
r
 
h
a
s
 
r
i
g
h
t
s
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
s
c
o
p
e
 
r
e
q
u
e
s
t
e
d
 
b
y
 
t
h
e
 
A
P
I
 
f
e
a
t
u
r
e

	
*

	
*
/

 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
 
v
a
l
i
d
a
t
e
(
$
s
c
o
p
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
c
o
p
e
s
 
=
 
F
l
i
g
h
t
:
:
g
e
t
(
'
s
c
o
p
e
s
'
)
;

 
 
 
 
 
 
 
 
$
s
c
o
p
e
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
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
s
c
o
p
e
,
 
$
s
c
o
p
e
s
)
 
|
|
 
$
s
c
o
p
e
s
[
0
]
 
=
=
 
'
*
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
o
p
e
_
v
a
l
i
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
F
l
i
g
h
t
:
:
h
a
l
t
(
4
0
3
,
 
'
C
l
i
e
n
t
 
n
o
t
 
a
l
l
o
w
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
i
s
 
f
e
a
t
u
r
e
 
:
 
'
.
$
s
c
o
p
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

